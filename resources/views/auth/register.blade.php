<x-layouts.layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-1 mt-3 titoloo">{{__('ui.registerTitle')}}</h1>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group mt-4">
                        <label for="inputName" class="my-2">{{__('ui.registerName')}}</label>
                        <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="{{__('ui.insertName')}}">
                      </div>
                    <div class="form-group">
                      <label for="inputEmail" class="my-2">Email</label>
                      <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="{{__('ui.insertEmail')}}">
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="my-2">Password</label>
                      <input name="password" type="password" class="form-control" id="inputPassword" placeholder="{{__('ui.insertPassword')}}">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordConfirmation" class="my-2">{{__('ui.registerConfirmPassword')}}</label>
                        <input name="password_confirmation" type="password" class="form-control" id="inputPasswordConfirmation" placeholder="{{__('ui.insertConfirmPassword')}}">
                      </div>
                    <button type="submit" class="btn btn-primary my-3">{{__('ui.registerNavbar')}}</button>
                </form>
            </div>
        </div>
    </div>
    <div class="custom-div"></div>
</x-layouts.layout>