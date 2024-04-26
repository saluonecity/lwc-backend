@extends('layouts.app')

@section('title', 'Category')

@section('main')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Little Win Coffee</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
            <h4 class="page-title">All Category</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group text-right mb-3">
            <a href="{{ route('categories.create') }}" class="btn btn-primary waves-effect waves-light mr-1">New Data</a>
        </div>

        <div class="card-box">
            
            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="text-center" width="5%">{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td width="10%">
                                <div class="btn-group dropleft">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-chevron-left"></i> Action 
                                    </button>
                                    <div class="dropdown-menu" x-placement="left-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                        <a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <button class="dropdown-item">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection