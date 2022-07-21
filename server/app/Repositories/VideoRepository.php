<?php

namespace App\Repositories;

use App\Models\Video;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class VideoRepository.
 */
class VideoRepository
{
    public function list()
    {
        return Video::get();
    }

    public function byId($id)
    {
        return Video::find($id);
    }
}
