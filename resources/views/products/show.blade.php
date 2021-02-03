@extends('layouts.app')

@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">productTitle</h1>
    </div>


    <div class="card">
        <form action="{{ route('search') }}" method="get" class="card-header">
            <div class="form-row justify-content-between">
                <div class="col-md-2">
                    <input type="text" name="title" placeholder="Product Title" class="form-control">
                </div>
                <div class="col-md-2">
                    <select name="variant" id="" class="form-control">
                        <option value="">--Please choose an option--</option>
                        <option value="Color">Color</option>
                        <option value="Size">Size</option>
                        <option value="Style">Style</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Price Range</span>
                        </div>
                        <input type="number" name="price_from" aria-label="First name" placeholder="From" class="form-control">
                        <input type="number" name="price_to" aria-label="Last name" placeholder="To" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="date" name="date" placeholder="Date" class="form-control">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>

        <div class="card-body">
            <div class="table-response">
                <!-- FOR LOOP START -->
                @for($i = 0; $i < count($productTitle); $i++)
                    @php
                    $j = $productTitle[0]->id
                    @endphp
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Variant</th>
                        <th width="100px">Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>{{ $productTitle[$i]->id }}</td>
                        <td>{{ $productTitle[$i]->title }} <br>{{ $productTitle[$i]->created_at }}</td>
                        <td>{{ $productTitle[$i]->description }}</td>
                        <td>
                            <dl class="row mb-0" style="height: 80px; overflow: hidden" id="variant">

                                <dt class="col-sm-3 pb-0">{{ $productVariantSize[$i]->variant }}/{{ $productVariantColor[$i]->variant }}/{{$productVariantStyle[$i]->variant}}</dt>
                                <dd class="col-sm-9">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 pb-0">Price : {{ $productVariantPrice[$i]->price }}</dt>
                                        <dd class="col-sm-8 pb-0">InStock : </dd>
                                    </dl>
                                </dd>
                            </dl>
                            <button onclick="$('#variant').toggleClass('h-auto')" class="btn btn-sm btn-link">Show more</button>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('product.edit', 1) }}" class="btn btn-success">Edit</a>
                            </div>
                        </td>
                    </tr>

                    </tbody>

                </table>
                @endfor
                <!-- FOR LOOP END -->
            </div>

        </div>

        <div class="card-footer">
            <div class="row justify-content-between">
                
                <div class="col-md-6">
                    <!-- PRODUCT LISTING DETAILS START -->
                    <p>Showing {{$j ?? 0}} to {{$i}} out of {{count($productTitle)}}</p>
                    <!-- PRODUCT LISTING DETAILS END -->
                </div>
                <div class="col-md-2">
                
                </div>
            </div>
        </div>
    </div>
@endsection