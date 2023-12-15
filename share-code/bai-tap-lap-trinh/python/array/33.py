arr = [1, 3, 2]
result = "Không tồn tại"

for i in range(1, len(arr) - 1):
    if arr[i] == arr[i - 1] + arr[i + 1]:
        result = "Tồn tại"

print(result)