@extends('layouts.dashboard')

@section('content')

    <div class="row my-5">
        <h2 class="fs-4 mb-1">Categories</h2>
        <div class="pull-right mb-3" style="display: flex;justify-content: flex-end;">
            <a class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" href=""> Create New
                Categorie</a>
        </div>

        <!-- Modal ADD-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add categorie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('categories.store') }}" method="post" id="myForm2">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name :</label>
                                <input type="input" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"
                                onclick="return confirm('are you sure you want to add this Catrgory')">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Moal ADD --}}


        <!-- Modal UPDATE-->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update categorie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('updateCat') }}" method="post" id="myForm2">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="cat_id" id="cat_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name :</label>
                                <input type="input" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"
                                onclick="return confirm('are you sure you want to add this Catrgory')">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Moal UPDATE --}}
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover table table-striped">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date created</th>
                        <th scope="col">Date update</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                        <tr>

                            {{-- <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" id="myForm"> --}}

                            <th scope="row">{{ $cat->id }}</th>
                            <td>{{ $cat->name }}</td>
                            <td>{{ $cat->created_at }}</td>
                            <td>{{ $cat->updated_at }}</td>
                            <td>
                                <button class="btn btn-success editbtn" value="{{ $cat->id }}">Edit</button>
                                {{-- @csrf --}}
                                <a class="btn btn-danger" href="categorie/delete/{{ $cat->id }}"
                                    onclick="return confirm('are you sure you want to delete this Catrgory')">Delete</a>
                                {{-- <form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            {{-- <span>{{ $categories->links() }}</span> --}}
            <div class="d-flex justify-content-center">
                {!! $categories->appends(['sort' => 'science-stream'])->links() !!}
            </div> 
        </div>

    </div>
    <script>
        // var myModal = document.getElementById('myModal')
        // var myInput = document.getElementById('myInput')

        // myModal.addEventListener('shown.bs.modal', function() {
        //     myInput.focus()
        // })


        $(document).ready(function() {
            $(document).on('click', '.editbtn', function() {
                let catId = $(this).val();
                $('#updateModal').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/editCat/" + catId,
                    success: function(response) {
                        // console.log(response.categorie.name);
                        $('#cat_id').val(response.categorie.id)
                        $('#name').val(response.categorie.name)
                    }
                })
            });
        });

        function add() {
            console.log("awaw");
            document.getElementById("myForm2").submit();
        }

        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this Category?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById("myForm").submit();
                    }
                });
        });
    </script>
@endsection
