str         = "php/12/java/140/frontend/30/javascript/15"

course_list = str.split('/')

longest_course_name = ""
longest_duration    = 0

for i in range(0, len(course_list), 2):
    course_name = course_list[i]
    duration    = int(course_list[i + 1])

    if duration > longest_duration:
        longest_course_name = course_name
        longest_duration    = duration

print(f"{longest_course_name}: {longest_duration}")