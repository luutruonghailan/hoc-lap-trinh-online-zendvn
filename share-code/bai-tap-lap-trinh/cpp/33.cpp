
#include <iostream>
using namespace std;
#include <bits/stdc++.h>

int main()
{
    int arrNumber[] = {1,2,3};
    bool found;
    int length = sizeof(arrNumber) / sizeof(int);

    for (int i = 0; i < length; i++)
    {
        if (arrNumber[i] == arrNumber[i-1] + arrNumber[i+1])
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