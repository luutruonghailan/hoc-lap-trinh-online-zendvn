file_path = "D:/Data/Doing/psd/hailan.doc"

folders = file_path.split("/")

folders = [folder for folder in folders if folder]

folders[0] = folders[0].replace(":", "")

print(" > ".join(folders))