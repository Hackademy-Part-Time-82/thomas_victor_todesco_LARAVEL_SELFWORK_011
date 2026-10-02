<x-layout>

    <section class="container-lg mt-5">

        <div class="row align-items-center justify-content-center">

            <div class="col-lg-4 mt-5">

                <form action="{{ route('login.store') }}" method="POST">
                    
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="">
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3 form-check d-lg-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Accedi</button>
                        <button type="reset" class="btn btn-danger">Reset campi</button>
                    </div>

                    <div class="mb-3 form-check d-lg-flex justify-content-center">
                        <p>Non sei ancora registrato?<a href="/register" class="ms-1 btn btn-primary rounded-pill">Accedi</a></p>

                    </div>


                </form>

            </div>

        </div>

    </section>


</x-layout>