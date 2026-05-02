@extends('layouts.frontend')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">New Doctor</h1>
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
          <form action="{{ route('backends.doctors.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="short_bio" class="form-label">Short Bio</label>
              <input type="text" class="form-control" id="short_bio" name="short_bio" required>
            </div>
            <div class="mb-3">
              <label for="department" class="form-label">Department</label>
              <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="mb-3">
              <label for="specialist" class="form-label">Specialist</label>
              <input type="text" class="form-control" id="specialist" name="specialist" required>
            </div>
            <div class="mb-3">
              <label for="years_of_experience" class="form-label">Years of Experience</label>
              <input type="text" class="form-control" id="years_of_experience" name="years_of_experience" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
              <label for="linked_in_profile" class="form-label">Linked In Profile</label>
              <input type="text" class="form-control" id="linked_in_profile" name="linked_in_profile">
            </div>
            <div class="mb-3">
              <label for="profile" class="form-label">Profile</label>
              <input type="text" class="form-control" id="profile" name="profile" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>

    </section><!-- /Doctors Section -->
@endsection
