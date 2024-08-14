@include('layouts.header')

<div id="main-wrapper">
    @include('layouts.navbar')



    @include('layouts.sidebar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card-body">
                <div class="panel-wrapper">
                    <div class="d-flex m-b-10 no-block">
                        <h5 class="card-title m-b-0 align-self-center">Categories</h5>

                    </div>
                    <div class="table-responsive">
                        <table class="table color-table">
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td><img src="{{ asset('category_images/' . $category->image) }}" alt=""
                                                title="" style="width: 50px; height: auto;">
                                        </td>
                                        <td><span class="font-semibold font-16">{{ $category->name }}</span>
                                            <br>
                                            {{ $category->description }}
                                        </td>
                                        <form action="{{ route('category_delete', $category->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <td><span class="font-semibold font-20 text-blue-light"> <button
                                                        type="submit"
                                                        class="btn btn-rounded waves-effect waves-light bg-danger font-14 text-white">Delete</button></span>
                                        </form>
                                        <br></br>
                                        <a href="{{ route('edit_category', $category->id) }}"
                                            class="btn btn-rounded waves-effect waves-light bg-secondary font-14 text-white">Edit</a>
                                        </td>
                                        <td>
                                            <div id="sparkline16"></div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>

@include('layouts.script')
</body>



</html>
