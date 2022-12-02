<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 offset-md-3 mt-3">
                <section class="content text-dark">
                    <div class="container-fluid">
                          <div class="card elevation-3">
                            <div class="card-header text-center">
                              <h1>Edit Order</h1>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              {{-- <form action="{{url('update-order/'.$orders->id)}}" method="POST" enctype="multipart/form-data"> --}}
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                  <label for="payment_status" class="col-form-label">Payment Status</label>
                                  <select  type="payment_status" wire:model="payment_status" name="payment_status" class="form-select form-control" id="payment_status" >
                                    @foreach ($payment_statuses as $ps)
                                        <option value="{{$ps}}" {{$orders->payment_status == $ps ? 'selected' : ' '}}>{{$ps}}</option>
                                    @endforeach
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="payment_status" class="col-form-label">Payment Status</label>
                                    <select  type="payment_status" wire:model="status" name="status" class="form-select form-control" id="payment_status" >
                                      @foreach ($statuses as $p)
                                          <option value="{{$p}}" {{$orders->status == $p ? 'selected' : ' '}}>{{$p}}</option>
                                      @endforeach
                                     </select>
                                  </div>
                                  <div class="form-group">
                                    <a type="button" class="btn btn-secondary" href="{{url('/order')}}">Back</a>
                                    <button wire:click="updateOrder" type="submit" class="btn btn-info">Update</button>
                                </div>

                              {{-- </form> --}}
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                    </div>
                </section>


            </div>
          </div>
        </div>

        <!-- Main content -->
      </section>
</div>
