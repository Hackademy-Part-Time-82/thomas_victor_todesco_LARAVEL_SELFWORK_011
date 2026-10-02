<x-layout>



    <section class="container-lg">

        <div class="row align-items-center justify-content-center">

            <div class="col-6 mt-5">
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="surname" vlaue="{{ old('surname') }}">
                        @error('surname')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



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
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            value="">
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control" id="exampleInputPassword2"
                            name="password_confirmation">
                        @error('password_confirmation')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    {{--                     <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
 --}}

                    <div class="mb-3 form-check d-lg-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Registrati</button>
                        <button type="reset" class="btn btn-danger">Reset campi</button>
                    </div>

                    <div class="mb-3 form-check d-lg-flex justify-content-center">
                        <p>Sei già registrato?<a href="{{ route('login') }}"
                        class="ms-1 btn btn-primary rounded-pill">Accedi</a></p>

                    </div>


                </form>

            </div>

        </div>

    </section>
































</x-layout>
