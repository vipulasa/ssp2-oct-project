<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Doctor</th>
            <th>Hospital</th>
            <th>Consultancy Fee</th>
            <th>Total</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $cart->doctor->name }}</td>
            <td>{{ $cart->hospital->name }}</td>
            <td>LKR {{ number_format($cart->consultation_fee, 2) }}</td>
            <td>LKR {{ number_format($cart->consultation_fee, 2) }}</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3"></td>
            <td>{{ $cart->total }}</td>
            <td></td>
        </tr>
        </tfoot>
    </table>

    <div>
        <form>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" />
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" />
            </div>

            <div class="mb-3">
                <label for="nic" class="form-label">NIC</label>
                <input type="text" class="form-control" id="nic" />
            </div>

            <button type="submit" class="btn btn-success">
                Checkout
            </button>
        </form>
    </div>
</div>
