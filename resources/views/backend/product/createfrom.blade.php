@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Product</h5>
                                <div class="card-body">
                                  <form action="{{url ('admin/product/insert') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    @error('name')
                                        <div class = "alert-danger mt-3">{{ $message }} </div>
                                    @enderror

                                    
                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    @error('price')
                                        <div class = "alert-danger mt-3">{{ $message }} </div>
                                    @enderror

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="description"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    @error('description')
                                        <div class = "alert-danger mt-3">{{ $message }} </div>
                                    @enderror

                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                                    <select name="category_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                      <option selected>กรุณาเลือกประเภทสินค้า</option>
                                      @foreach ($category as $cat)
                                        <option value="{{$cat->category_id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>

                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
                                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>

                                      @error('image')
                                        <div class = "alert-danger mt-3">{{ $message }} </div>
                                    @enderror

                                    <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
                                    <a href="{{ route('p.index')}}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                     
                    </div>

@endsection