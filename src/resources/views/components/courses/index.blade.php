<div class="flex justify-center my-4">
    <div class="flex flex-wrap gap-4 w-3/4 justify-center">
        @foreach ($courses as $course)
            <x-courses.course :course="$course" />
        @endforeach
    </div>
</div>
