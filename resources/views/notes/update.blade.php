@extends('master')
@section('content')
<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
        <div class="card mt-2">
            <h5 class="card-header">Cập nhật thông tin</h5>
            <div class="card-body">
                <form method="post" action="{{route('edit.note', $note->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Tên bản ghi</label>
                        <input type="text" name="name" value="{{$note->name}}" class="form-control  @error('name') is-invalid @enderror" required>
                      
                    </div>
                    <div class="form-group">
                        <label for="">	Tên người viết </label>
                        <input type="text" name="manager" value="{{$note->manager}}" class="form-control" required>
                        @error('manager')
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">bản ghi</label>
                        <input type="text" name="note" value="{{$note->note}}" class="form-control" required>
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Trạng thái</label>
                        <select class="form-control" id="Trạng thái" name="status" required>{{$note->status}}
                            <option>Đã viết</option>
                            <option> Đang viết</option>
                            <option>Đã sửa</option>
                          </select>
                      </div> 
                    </div>      
                    <button type="submit" onclick="alert('Cập nhật thành công')"class="btn btn-info">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection