@extends('admin.admin-panel.main')


@section('content')
    <div>
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>

    <h4>Create Team</h4>
    <hr>

    <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="title"
                        class="form-control @error('title') is-invalid @enderror">

                    @error('title')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image [130px x 130px]</label>
                    <input type="file" id="formFile" name="image"
                        class="form-control-file @error('image') is-invalid @enderror">

                    @error('image')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input type="text" id="profession" name="profession"
                        class="form-control @error('profession') is-invalid @enderror">

                    @error('profession')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Expertise</label>
                    <input type="text" id="expertise" name="expertise"
                        class="form-control @error('expertise') is-invalid @enderror">

                    @error('expertise')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Category</label>

                    <select id="" class="form-control" name="category">
                        <option value="team">Team</option>
                        <option value="advisor">Advisor</option>
                        <option value="trainer">Trainer</option>
                        <option value="special_trainer">Special Trainer</option>
                        <option value="guest_trainer">Guest Trainer</option>
                        <option value="alumni">Alumni</option>
                    </select>

                    @error('category')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Add other fields similarly -->
            <div class="col-md-12">
                <input type="submit" value="Add Team Member" class="btn btn-success">
            </div>

            <br><br><br>

        </div>

        <!-- Add other form sections as needed -->

    </form>
@endsection
