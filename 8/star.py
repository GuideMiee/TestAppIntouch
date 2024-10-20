x = int(input("Enter number of rows: "))

for i in range(x, 0, -1):
    for space in range(0, x-i):
        print("  ", end="")
    for j in range(i, 2*i-1):
        print("* ", end="")
    for j in range(1, i-1):
        print("* ", end="")
    print()