str = "hai LAN "

str = str.lower()
str = str.strip()

str += '.' if not str.endswith('.') else ""

str = str.capitalize()

print(str)
