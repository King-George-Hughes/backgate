<x-layout-4>
    <div class="container-fluid bg-secondary right-side2 p-1 m-auto">
        <div class="bg-secondary">
          <div class="container-fluid right-side3">
            <p class="mb-4 text-primary h4 my-3">
              <i class="fas fa-warehouse"></i> Paypal
            </p>

            <!-- DataTales Example -->
            <div class="mb-4 bg-secondary">
              <div class="right-side3">
                <div class="table-responsive">
                  <table
                    class="table table-striped"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                    border="0"
                  >
                    <thead>
                      <tr>
                        <th>Paypal</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Balance</th>
                        <th>Order</th>
                      </tr>
                    </thead>

                    <tbody>
                      @forelse ($paypals as $paypal)
                        <tr>
                          <td>Paypal</td>
                          <td>
                            {{ $paypal->description }}
                          </td>
                          <td class="text-success">${{ $paypal->price }}</td>
                          <td class="text-warning">${{ $paypal->balance }} </td>
                          <td>
                            <a href="#" class="btn btn-outline-primary"
                              >BUY</a
                            >
                          </td>
                        </tr>
                      @empty
                          Nothing to show
                      @endforelse
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-layout-4>