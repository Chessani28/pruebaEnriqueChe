<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithFileUploads;

class ViewVideos extends Component
{
    use WithFileUploads;

    public $videos;
    public $search;
    public $searchCount = 0;


    public function render()
    {
        $this->videos = Video::when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%');
        })->get();

        return view('livewire.view-videos')->layout('layouts.app');
    }

    public function mount()
    {
        $this->search = '';
    }
    public function searchVideos()
    {
        if ($this->search) {
            $foundVideo = Video::where('title', 'like', '%' . $this->search . '%')->first();

            if ($foundVideo) {
                $foundVideo->increment('count_search');
                $this->searchCount = $foundVideo->count_search;
            }
            $this->render();
        }
    }
    public function incrementRepCounter($videoId)
    {
        $video = Video::find($videoId);

        if ($video) {
            $video->increment('count_rep');
        }
    }
}
