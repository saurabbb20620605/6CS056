# 6CS056 — Training Institute Management System

Laravel web and REST API application developed progressively across module workshops using Git branching (`main`, `Workshop1`, `Workshop2`, `Workshop3`).

## Project Structure
- `6CS056-Workshop/` — Active Laravel application (MVC Web UI, Blade Components, REST API Controllers, Form Requests, API Resources, MySQL)
- `completed_workshops/` — Local frozen snapshots of completed workshop milestones (`Workshop1`, `Workshop2`, `Workshop3`) stored outside `.git`

## Branches & Milestones
- **`Workshop1`**: Student CRUD and Course CRUD built with closure routes, MySQL (`WorkshopDB`), and custom responsive Blade UI
- **`Workshop2`**: MVC and DRY refactor featuring `StudentController` and `CourseController`, `Route::resource()`, route model binding, single `rules()` validation methods, model casts & virtual `age` accessor, and reusable Blade components
- **`Workshop3`**: RESTful API layer (`routes/api.php`) featuring `Api\StudentController` and `Api\CourseController`, dedicated `FormRequest` validation classes (`Store*Request`, `Update*Request`), `JsonResource` transformers (`StudentResource`, `CourseResource`), and proper HTTP status codes (`200`, `201`, `204`, `422`)
