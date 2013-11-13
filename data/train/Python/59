import sys

_inputType = 'large'

_tcs = []
with open(_inputType+'.in','r') as _in:
    _t = int(_in.readline())
    _tcs = []
    while len(_tcs)<_t:
        _tc = []
        while len(_tc)<4:
            _tc.append(_in.readline(_t).strip())
        _tcs.append( _tc )
        _in.readline(_t)
    _in.close()

def _solveTC( _tc):

    _d  = 0
    for _j in range(4):
        _x , _o = 0 , 0
        for _i in range(4):
            _x += _tc[_j][_i] in ['X','T']
            _o += _tc[_j][_i] in ['O','T']
            _d += _tc[_j][_i] == '.'
        if _x>3: return 'X won'
        if _o>3: return 'O won'

    for _i in range(4):
        _x , _o = 0 , 0
        for _j in range(4):
            _x += _tc[_j][_i] in ['X','T']
            _o += _tc[_j][_i] in ['O','T']
        if _x>3: return 'X won'
        if _o>3: return 'O won'

    _x , _o = 0 , 0
    for _k in range(4):
        _x += _tc[_k][_k] in ['X','T']
        _o += _tc[_k][_k] in ['O','T']
    if _x>3: return 'X won'
    if _o>3: return 'O won'

    _x , _o = 0 , 0
    for _k in range(4):
        _x += _tc[3-_k][_k] in ['X','T']
        _o += _tc[3-_k][_k] in ['O','T']
    if _x>3: return 'X won'
    if _o>3: return 'O won'

    return 'Game has not completed' if _d>0 else 'Draw'

_result = []
for _i , _tc in enumerate( _tcs ):
    _result.append( 'Case #' + str(1+_i) + ': ' + str(_solveTC( _tc )) +  '\n' )

with open(_inputType+'.out','w') as _out:
    _out.writelines(_result)
    _out.close()

print('Done')