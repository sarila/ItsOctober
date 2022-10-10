void towerOfHanoi(int s,int h, int d, int n)
{
    if(n==1)
    {
        cout << "move disk " <<  n << " from rod " << s << " to rod " <<  d << "\n";
        return;
    }
    towerOfHanoi(s,d,h,n-1);
    cout << "move disk " <<  n << " from rod " << s << " to rod " <<  d << "\n";
    towerOfHanoi(h,s,d,n);
    return;
}
