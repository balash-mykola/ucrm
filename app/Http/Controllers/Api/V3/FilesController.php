<?php

namespace App\Http\Controllers\Api\V3;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilesRequest;
use App\Http\Requests\UpdateFilesRequest;
use App\Models\Files;
use App\Http\Resources\FilesResource;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index()
    {
        return FilesResource::collection(Files::all());
    }

    public function store(StoreFilesRequest $request)
    {
        $file = Files::create($request->validated());
        return FilesResource::make($file);
    }

    public function show($id)
    {
        $file = Files::findOrFail($id);
        return FilesResource::make($file);
    }

    public function update(UpdateFilesRequest $request, $id)
    {
        $file = Files::findOrFail($id);
        $file->update($request->validated());
        return FilesResource::make($file);
    }

    public function destroy($id)
    {
        $file = Files::findOrFail($id);
        $file->delete();
        return response()->noContent();
    }

    public function complete(Request $request, $id)
    {
        $file = Files::findOrFail($id);

        $file->fill($request->only([
            'file_path',
            'file_type',
            'hash',
            'size',
            'date_created'
        ]));

        $file->save();

        return FilesResource::make($file);
    }
}
