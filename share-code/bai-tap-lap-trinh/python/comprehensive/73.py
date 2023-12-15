id     = "69"
str    = "1, 69, 80, 90, 69"

arr_id = [id.strip() for id in str.split(',')]

count  = arr_id.count(id)

print(f"ID {id} xuất hiện {count} lần")