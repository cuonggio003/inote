@extends('master')
@section('content')
<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">

   <section class="get-in-touch">
   <h1 class="title">Thêm mới bản ghi </h1>
   <form method="post" action="{{route('store.note')}}"  enctype="multipart/form-data">
    @csrf
      <div class="form-field col-lg-6">
        <label for="">Tên bản ghi</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control  @error('name') is-invalid @enderror" required>
        @error('name')
          <p class="text-danger">{{ $message }}</p>
        @enderror
     </div> 
    <div class="form-field col-lg-12">
        <label for="">Trạng thái </label>
        <select class="form-control" id="Trạng thái" name="status" required>
            <option>Đã viết</option>
            <option> Đang viết</option>
            <option>Đã sửa</option>
          </select>
          @error('status')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div> 
      <div class="form-field col-lg-12">
        <label for=""> Tên người viết</label>
        <input class="form-control" id=" Tên người viết" name="manager" required>
        @error('manager')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      
     <div class="form-field col-lg-12">
        <label for="">Bản ghi</label>
        <input class="form-control" id="Bản ghi" name="note" required>
        @error('note')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
   
      <div class="form-field col-lg-12">
        <button onclick="alert('Thêm mới thành công')" type="submit" class="btn btn-primary">Submit</button>
      </div>
   </form>
   </section>

    </div>
</div>

@endsection
