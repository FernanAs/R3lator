@extends('layouts.app')

@section('content')
<div class="container">
    <form action="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add a Property</legend>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Name Of Property</label>
                <div class="col-lg-10">
                    <input type="text" name="name" class="form-control" placeholder="Name Of Property">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Monthly charge</label>
                <div class="col-lg-10">
                    <input type="text" name="monthly" class="form-control" placeholder="Monthly Charge">
                </div>
            </div>
            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Address</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="address" id="textArea" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Access</label>
                <div class="col-lg-10">
                    <input type="text" name="floor" class="form-control" placeholder="Floor Space">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Utility</label>
                <div class="col-lg-10">
                    <input type="text" name="utility" class="form-control" placeholder="Utility">
                </div>
            </div>

            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Description</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="descrip" rows="3" id="textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Featured Image</label>
                <div class="col-lg-10">
                    <input type="file" name="images">
                </div>
            </div>
            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Rooms Images</label>
                <div class="col-lg-10">
                    <input type="file" name="img[]" multiple>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-danger">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
@endsection