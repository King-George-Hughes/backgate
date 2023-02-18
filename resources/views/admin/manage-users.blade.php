<x-admin-layout>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
        >
        <h1 class="h2"><i class="fas fa-blog"></i> Manage Users</h1>
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
       
        {{--  --}}
        <div class="table-responsive mb-5 mt-5">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Created At</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $number = 1;    
                @endphp
                @forelse ($users as $user)
                <tr>
                    <td>{{ $number++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @empty
                    Nothing to show
                @endforelse
              </tbody>
            </table>

            <div class="mb-3 p-4 pagination-md">
                {{ $users->links() }}
            </div>
          </div>
      </div>
</x-admin-layout>