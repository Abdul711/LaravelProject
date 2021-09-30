@extends('admin/layouts')
@section("pageTitle",$pageTitle)
@section("container")

<div class="row">
    @error("image")
    {{$message}}
    @enderror
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">{{$pageTitle}}</div>
                                    <div class="card-body">
                                   
                                        <form action="{{route('category.store')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                                <input id="cc-pament" name="categoryName" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                                            </div>
                                     
                                         
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Parent Category</label>
                                               <select name="parentId" class="form-control">
                                                   <option value=""></option> 
</select>
                    
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Image</label>
                                                    <div class="input-group">
      
                                                  <input type="file" name="image">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                @csrf
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-{{$fontAwe}} fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">{{$pageTitle}}</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


</div>
                            @endsection