#include <iostream>
using namespace std;
int main() {
    int arrInt1[] = {1, 2, 3, 2};
    int arrSize1 = sizeof(arrInt1) / sizeof(arrInt1[0]);
    
cout << "arrSize1: " << arrSize1 << endl;
for (size_t i = 0; i < arrSize1; i++)
{
    /* code */
}

    
    return 0;
}