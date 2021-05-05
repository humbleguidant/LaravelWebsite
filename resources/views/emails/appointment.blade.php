<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Appointment Request</div>
                <br>
                <div class="card-body">
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Name: <strong>{{ $user->firstname }} {{ $user->lastname }}</strong></label>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Email: <strong>{{ $user->email }}</strong></label>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Phone Number: <strong>{{ $data['phone'] }}</strong></label>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Desired Schedule: <strong>{{ $data['schedule'] }}</strong></label>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Additional Comments:</label>

                        <div class="col-md-6">
                            <p><strong>{{ $data['message'] }}</strong></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>