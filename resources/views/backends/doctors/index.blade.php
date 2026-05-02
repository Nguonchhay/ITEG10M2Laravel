@extends('layouts.frontend')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Doctors</h1>
              <p class="mb-0">
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum
                debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                ipsum dolorem.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Backends</a></li>
            <li class="current">Doctors</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Short Bio</th>
              <th scope="col">Department</th>
              <th scope="col">
                <a href="{{ route('backends.doctors.create') }}" class="btn btn-primary btn-sm">+ New</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($doctors as $doctor)
              <tr>
                <th scope="row">{{ $doctor->id }}</th>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->short_bio }}</td>
                <td>{{ $doctor->department }}</td>
                <td>Edit | Delete</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        </div>

      </div>

    </section><!-- /Doctors Section -->
@endsection
