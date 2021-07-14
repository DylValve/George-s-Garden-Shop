<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Garden Admin Portal</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github].com/necolas/normalize.css */

        .top-bar, .top-bar ul {
            background-color: #D5DBDB !important;
        }

        .flex {
            display: flex
        }

        .items-table {

        }

        .items-table td {
            color: #717D7E;

            border-right: 1px solid #BFC9CA;
            border-left: 1px solid #BFC9CA;
        }

        .items-table tr {
            background-color: #F4F6F6;
        }

        .items-table tr:nth-child(even) {
            background-color: #D5DBDB;
        }

        .items-table th {
            border-top: 1px solid #AAB7B8;
            border-bottom: 1px solid #AAB7B8;
            border-right: 1px solid #BFC9CA;
            border-left: 1px solid #BFC9CA;
            background-color: #AAB7B8;
        }

        .items-table .text-right {
            padding-right: 3rem;
        }

        .price-align {
            padding: 0 10px !important;
        }

        h1 {
            margin: 20px 0px !important;
        }

        img {
            width: 400px;
        }

        .options-td {
            height: 100%;
            right: 0;
            top: 0;
        }
    </style>


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css"
          integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"
            integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
</head>
<body class="antialiased">
<header>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">Library</li>
                <li><a href="{{route('products.index')}}">All Products</a></li>
                <li><a href="{{route('products.create')}}">Add Products</a></li>
                <li><a href="{{route('categories.index')}}">All Categories</a></li>
                <li><a href="{{route('categories.create')}}">Add Categories</a></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="{{ route('dashboard') }}">Back</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="mx-auto">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12">

                <h1 class="text-center">All Products</h1>

                @if(Session::has('message'))
                    <div class="alert {{ Session::get('alert-class') }}">
                        {{ Session::get('message') }}
                    </div>
                @endif

                <table class="items-table">
                    <thead>
                    <tr class="table-expand-row">
                        <th width="200">Name</th>
                        <th width="200">Category</th>
                        <th>Image</th>
                        <th class="text-right price-align" width="150">Price</th>
                        <th width="150">Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($products as $product)
                        <tr class="table-expand-row" data-open-details>
                            <td>{{$product->name}}</td>
                            <td>
                                @foreach($categories as $category)
                                    @if($category->id == $product->category_id)
                                        {{$category->name}}
                                    @elseif(is_null($product->category_id))

                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <img src="/images/{{ $product->image }}" alt="Image">
                            </td>
                            <td class="text-right price-align">${{$product->price}}</td>
                            <td class="options-td">
                                <div class="flex">
                                    <a href="{{route('products.show',$product)}}" class="button button-primary"
                                       type="submit">view</a>
                                    <a href="{{route('products.edit',$product)}}" class="button button-primary"
                                       type="submit">edit</a>
                                    <form method="POST" action="{{route('products.destroy', $product)}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="button button-red" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <td><h2>No Products Found</h2></td>

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
