<?php

namespace App\Livewire;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadVideo extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $video;
    public $video_url;

    public function render()
    {
        return view('livewire.upload-video')->layout('layouts.app');
    }

    public function uploadVideo()
{
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'required|url',

        ]);
        Video::create([
            'title' => $this->title,
            'description' => $this->description,
            'video_url' => $this->video_url,
            'count_rep' => null,
            'count_search' => null,

        ]);
        $this->reset(['title', 'description', 'video_url']);

        session()->flash('message', 'Video subido exitosamente.');
    }
}

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'video' => 'required|mimes:mp4,mov,avi|max:10240',
        ]);

        $videoUrl = $request->file('video')->store('videos', 'public');

        $video = Video::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'video_url' => $videoUrl,
            'count_rep' => null,
            'count_search' => null,
        ]);

        return redirect()->route('upload.video')->with('success', 'Video subido exitosamente.');
    }
}
