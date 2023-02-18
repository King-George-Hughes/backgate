<x-layout-5>
    <div class="container-fluid bg-secondary right-side p-4 m-auto">
        <h4 class="h4 text-danger text-uppercase">Insufficient Balance</h4>

        <span class="text-success fw-bold">{{ Auth::user()->name }}</span>
        <span class="text-muted">'s Bitcoin Account Balance</span>
        <span class="text-muted fs-3 ms-3">$0.00</span>
        <p class="text-muted mt-3">Insufficient balance to make purchase</p>

        <span class="d-inline-block bg-dark mt-3 p-3 myBorder">
          <span class="text-muted w-50"
            >This is your bitcoin deposit address
            <span class="bg-primary text-white px-1"
              >39y22DTKVUnGmc631aHgpGsycPMGsUZHcr</span
            >
            send only bitcoin to this address! sending any other token will
            result to loss of assets, Thank you.</span
          >
          <br />
          <a href="#" class="btn btn-primary mt-3 px-3">Deposit</a>
        </span>
      </div>
</x-layout-5>