# 6CS056 — Training Institute Management System

Laravel web application developed progressively across module workshops using Git branching (`main`, `Workshop1`, `Workshop2`).

## Project Structure
- `6CS056-Workshop/` — Active Laravel application (MVC Controllers, Models, Blade Components, MySQL)
- `completed_workshops/` — Local frozen snapshots of completed workshop milestones (`Workshop1`, `Workshop2`) stored outside `.git`

## Branches & Milestones
- **`Workshop1`**: Student CRUD and Course CRUD built with closure routes, MySQL (`WorkshopDB`), and custom responsive Blade UI
- **`Workshop2`**: MVC and DRY refactor featuring `StudentController` and `CourseController`, `Route::resource()`, route model binding, single `rules()` validation methods, model casts & virtual `age` accessor, and reusable Blade components (`<x-layouts.app>`, `<x-navbar />`, `<x-footer />`, `<x-alert />`, `<x-delete-form>`, `<x-students.form>`, `<x-courses.form>`)
