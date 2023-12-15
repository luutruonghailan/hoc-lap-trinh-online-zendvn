str  = "hoclaptrinh"
key  = "335"

word_lengths  = list(map(int, key))

decoded_words = []
start_index   = 0

for length in word_lengths:
    decoded_words.append(str[start_index:start_index+length])
    start_index += length

decoded_words  = [word.capitalize() for word in decoded_words]

decoded_string = ' '.join(decoded_words)

print(decoded_string)