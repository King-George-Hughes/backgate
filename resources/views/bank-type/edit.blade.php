<x-admin-layout>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
        >
        <h1 class="h2"><i class="fas fa-warehouse"></i> Manage Bank Types</h1>
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
          <h4>Edit Bank Type</h4>
          <form action="/bank-type/{{ $bank_type->id }}" method="POST" class="form">
            @csrf
            @method('PUT')
            <!-- Bank -->
            <label for="bank_type" class="form-label mt-2">Bank Type</label>
            <input
              type="text"
              id="bank_type"
              name="bank_type"
              value="{{ $bank_type->bank_type }}"
              class="form-control  @error('bank_type') is-invalid @enderror"
            />
            @error('bank_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <button type="submit" class="btn btn-primary mt-2">Update Bank Type</button>
          </form>
          <!--  -->
        </div>

       
      </div>
</x-admin-layout>