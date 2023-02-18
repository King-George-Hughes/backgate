<x-admin-layout>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
        >
        <h1 class="h2"><i class="fas fa-money-bill-alt"></i> Manage CashApp</h1>
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
          <h4>Edit Cashapp</h4>
          <form action="/cashapp/{{ $cashapp->id }}" method="POST" class="form">
            @csrf
            @method('PUT')
            <!-- Price -->
            <label for="price" class="form-label mt-2">Price</label>
            <input
              type="number"
              id="price"
              name="price"
              value="{{ $cashapp->price }}"
              class="form-control  @error('price') is-invalid @enderror"
            />
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <!-- Balance -->
            <label for="balance" class="form-label mt-2">Balance</label>
            <input
              type="number"
              id="balance"
              name="balance"
              value="{{ $cashapp->balance }}"
              class="form-control @error('balance') is-invalid @enderror"
            />
            @error('balance')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <!-- Description -->
            <label for="description" class="form-label mt-2"
              >Description</label
            >
            <textarea
              name="description"
              id="description"
              cols="30"
              rows="5"
              class="form-control @error('description') is-invalid @enderror"
            >{{ $cashapp->description }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <button type="submit" class="btn btn-primary mt-2">Update Cashapp</button>
          </form>
          <!--  -->
        </div>

      </div>
</x-admin-layout>