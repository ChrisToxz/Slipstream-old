<?php

namespace App\Jobs\Tag;

use App\Enums\VideoType;
use App\Models\Tag;
use App\Models\Video;
use FFMpeg;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Imtigger\LaravelJobStatus\Trackable;
use Mockery\Exception;

class StoreFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Trackable;

    public $timeout = 0;
    protected $file, $tag, $type;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Tag $tag, $file, $type)
    {
        $this->prepareStatus(['tag_id' => $tag->id]);
        $this->tag = $tag;
        $this->file = $file;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {


        switch ($this->type){
            case VideoType::Original():
                $ffmpeg = FFMpeg::openUrl($this->file['path']); // TODO: Check
                $media = Video::create([
                    'file' => $this->file['name']
                ]);
                $media->tag()->save($this->tag);
                \Storage::disk('tags')->put($this->tag->tag.'/'.$this->file['name'], file_get_contents($this->file['path']), 'public');
                toastr()->addSuccess('Tag ready!');
                break;
            case VideoType::X264():
                x264Optimization::dispatch($this->getJobStatusId(), $this->tag, $this->file['path'])->onConnection('sync');
                break;
            case VideoType::HLS():
                StreamOptimization::dispatch($this->getJobStatusId(), $this->tag, $this->file['path'])->onConnection('sync');
                break;
            default:
                throw new Exception('Wrong type');
        }

        GetVideoInfo::dispatch($this->tag, $this->type)->onConnection('sync');


    }
}
