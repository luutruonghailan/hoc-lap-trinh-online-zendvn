arr = [2, 4, 6, 8, 8]

# Cách 1:
total_sum = 0
count = 0

for i in range(0, len(arr), 2):
    if arr[i] % 2 == 0:
        total_sum += arr[i]
        count += 1

avg = total_sum / count if count > 0 else 0

# Cách 2:
# selected_elements = [arr[i] for i in range(0, len(arr), 2) if arr[i] % 2 == 0]

# avg = sum(selected_elements) / len(selected_elements) if len(selected_elements) > 0 else 0

print("Avg:", avg)