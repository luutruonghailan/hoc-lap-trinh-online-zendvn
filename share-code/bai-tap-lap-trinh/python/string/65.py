import os

file_path = "D:/Data/Doing/psd/hailan.doc"

file_name_extension = os.path.splitext(os.path.basename(file_path))

file_name       = file_name_extension[0]
file_extension  = file_name_extension[1][1:]

print("Name:", file_name)
print("Extension:", file_extension)