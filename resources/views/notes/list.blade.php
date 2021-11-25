@extends('master')
@section('content')
<div>
    <div class="card mt-2"> 
       <h5 class="card-header">Danh sách note</h5>
    <div class="col-12 mt-2">
        <div class="col-md-6">
           <a class="btn btn-success" href="{{route('create.note')}}">Thêm mới </a>
        </div>
    </div>
       <div class="card-body">
           <table class="table table-hover"> 
               <tr>
                   <th>STT</th>
                   <th>Tên bản ghi</th>
                   <th>Trạng thái</th>
                   <th>Tên người viết</th>
                   <th></th>
                   <th>Bản note</th>
                 
               </tr>
                                   
               @forelse($notes as $key => $note)
               <tr id="note-item-{{$note->id}}">
                   <td>{{ $key + 1 }}</td>
                   <td>{{ $note->name}}</td>
                   <td>{{ $note->status}}</td>
                   <td>{{ $note->manager}}</td>
                   <td></td>
                   <td>{{ $note->note}}</td>
                 
                 
                 
                
                   <td><a href="{{route('update.note', $note->id)}}" class="btn btn-primary">Sửa</a>
                       <a onclick="alert('Xóa thành công')" href=" {{route('delete.note', $note->id)}}" class="btn btn-danger">Xóa</a>
                   </td>
               </tr>
               @empty
               <tr>
                   <td colspan="8 ">No data</td>
               </tr>
               @endforelse
           </table>
    </div>
   </div>

@endsection