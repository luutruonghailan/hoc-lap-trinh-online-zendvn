
#include <iostream>
using namespace std;
#include <bits/stdc++.h>

int main()
{
    int arrInt[] = {1, 2, 3};
    int yourNumber = 2;
    bool found;
    int length = sizeof(arrInt) / sizeof(int);

    for (int i = 0; i < length; i++)
    {
        if (yourNumber == arrInt[i])
        {
            found = true;
            cout << "Tồn tại";
        }
    }
    if (found != true)
    {
        cout << "Không tồn tại";
    }
}