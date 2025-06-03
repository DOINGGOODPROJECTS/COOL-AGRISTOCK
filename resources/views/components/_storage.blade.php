<script>
    var storage = document.getElementById('graphstorage');
    var chartstorage = echarts.init(storage);
    
    chartstorage.setOption({
        title: {
            text: 'Zones de Stockage',
            left: 'center'
        },
        tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            left: 'left'
        },
        series: [
            {
              name: 'Access From',
              type: 'pie',
              radius: ['40%', '70%'],
              avoidLabelOverlap: false,
              itemStyle: {
                borderRadius: 10,
                borderColor: '#fff',
                borderWidth: 2
              },
              label: {
                show: false,
                position: 'center'
              },
              emphasis: {
                label: {
                  show: true,
                  fontSize: 40,
                  fontWeight: 'bold'
                }
              },
              labelLine: {
                show: false
              },
              data: [
                @foreach($storages as $item)
                    { value: {{ $item->stocks->count() }}, name: '{{ $item->name }}' },
                @endforeach
              ]
            }
        ]
    }
    
    
    );
</script>