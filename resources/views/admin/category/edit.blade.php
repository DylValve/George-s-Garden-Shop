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
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .flex {
            display: flex
        }

        .justify-center {
            justify-content: center
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .text-center {
            text-align: center
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .top-bar, .top-bar ul {
            background-color: #D5DBDB !important;
        }

        .flex {
            display: flex
        }

        .items-table {

        }

        .top-bar, .top-bar ul {
            background-color: #D5DBDB !important;
        }

        .flex {
            display: flex
        }

        .items-table {

        }

        .items-table td {

        }

        .items-table tr {
            background-color: #F4F6F6;
        }

        .items-table tr:nth-child(even) {
            background-color: #D5DBDB;
        }

        .items-table th {
            background-color: #AAB7B8;
        }

        .items-table .text-right {
            padding-right: 3rem;
        }

        h1 {
            margin: 20px 0px !important;
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

                <h1 class="text-center">Editing Category</h1>

                <table class="w-75 items-table">
                    <tbody>
                    <tr>
                        <td class="flex justify-center">
                            <form method="POST" action="{{route('categories.update', $category)}}">
                                @method('PUT')
                                @csrf
                                <ol>
                                    <label for="categoryName">Name:</label>
                                    <input type="text" id="name" name='categoryName'
                                           value="{{old('name')??$category->name}}">
                                </ol>
                                <button class="button button-primary" type="submit">Submit</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>
                            @if ($errors->any())
                                <div class="label alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
