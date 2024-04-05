<div class="page-header min-vh-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
          <div class="card card-plain">
            <div class="card-header pb-0 text-start">
              <h4 class="font-weight-bolder">Create New Student here</h4>
              <p class="mb-0">Enter necessary inforamation</p>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ route('students') }}">
                    @csrf
                    <!-- Form fields -->
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg" name="name" placeholder="Name" aria-label="Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg" name="roll" placeholder="Roll" aria-label="Roll">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg" name="class" placeholder="Class" aria-label="Class">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Create</button>
                        <button onclick="window.location='{{ route('students') }}'" type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Cancel</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
