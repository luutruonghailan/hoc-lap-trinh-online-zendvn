arrInt = [1, 2, 3, 2]

unique_numbers = list(set(arrInt))

unique_numbers.sort()

result_str = "-".join(map(str, unique_numbers))

print(f"Input: {arrInt}\nOutput: {result_str}")