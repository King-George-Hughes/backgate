<x-admin-layout>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
        >
        <h1 class="h2"><i class="fas fa-warehouse"></i> Manage Banks</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">
                Share
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                Export
            </button>
            </div>
            <button
            type="button"
            class="btn btn-sm btn-outline-secondary dropdown-toggle"
            >
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
            </button>
        </div>
        </div>

    <div class="row mb-5">
        <div class="col-md-6">
          <h4>Add a new Bank</h4>
          <form action="/manage-bank" method="POST" class="form">
            @csrf
            <!-- Bank -->
            <label for="bank" class="form-label mt-2">Bank</label>
            <input
              type="text"
              id="bank"
              name="bank"
              class="form-control  @error('bank') is-invalid @enderror"
            />
            @error('bank')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
            
            <button type="submit" class="btn btn-primary mt-2">Add Bank</button>
          </form>
          <!--  -->
        </div>

        {{--  --}}
        <div class="table-responsive mb-5 mt-5">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Bank</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $number = 1;    
                @endphp
                @forelse ($banks as $bank)
                <tr>
                    <td>{{ $number++ }}</td>
                    <td>{{ $bank->bank }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="/bank/{{ $bank->id }}/edit" class="btn btn-sm btn-outline-warning me-2">Edit</a>
                        <form action="/bank/{{ $bank->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                      </div>
                  </td>
                </tr>
                @empty
                    Nothing to show
                @endforelse
              </tbody>
            </table>
          </div>
      </div>
</x-admin-layout>