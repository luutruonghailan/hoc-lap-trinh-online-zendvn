import re

input = "2c+)1o!@(*&!y@&chi&^c!@#o3co$23%%^nd$#$!uo5ng"

str_to_decode = re.sub("[^A-Za-z]", "", input)
key           = re.sub("[^0-9]+", "", input)

start_index = 0
result      = ""

for i, current in enumerate(key):
    end_index   = start_index + int(current)
    word        = str_to_decode[start_index:end_index].capitalize() + " "
    result      += word
    start_index = end_index

print(result.strip())