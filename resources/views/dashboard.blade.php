<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

  <div class='container1'>
    <div class='madeby'>created by <a href='https://www.linkedin.com/in/mateo-ceballos-chica-b59316245/' target='_blank'>Mateo Ceballos</a></div>
    <div class='sidebar'>
      <div class='navigation-elm'><span class='nav-text'><i class="fa fa-fw fa-area-chart"></i><span class='text-short'>Sales</span> <span class='text-long'>Dashboard</span></span>
      </div>
      <div class='sub-navigation-elm'><a href='{{ route('products.index') }}'>Product Performance </a></div>
      <div class='sub-navigation-elm'> <a href="https://www.stackscale.com/es/blog/crecimiento-estadisticas-ecommerce/" target="_blank">Competitive Landscape</a></div>
      <div class='navigation-elm'><span class='nav-text'><i class="fa fa-fw fa-users"></i><span class='text-long'><a href='{{ route('users.index') }}'>Customer Database </a></span></span>
      </div>
      <div class='navigation-elm'><span class='nav-text'><i class="fa fa-fw fa-comment"></i><span class='text-short'> <a href="#Workflow">Community</a></span>
        <div class='update-number'>3</div>
        </span>
      </div>
      <div class='navigation-elm'><span class='nav-text'><i class="fa fa-fw fa-comment"></i><span class='text-short'> <a href="#monitoring">Product monitoring</a></span>
      </div>
      <div class='navigation-elm'><span class='nav-text'><i class="fa fa-fw fa-gear"></i><span class='text-short'>Settings</span></span>
      </div>
  
    </div>
  
    <div class='row'>
      <div class='key-metrics white-border'>
        <div class='small'>Revenue</div>
        58643.87$</div>
      <div class='key-metrics blue-border'>
        <div class='small'>Units Sold</div>950</div>
    </div>
    <div class='linechart-element'><canvas id="linechart"> </canvas>
    </div>
    <div class='row'>
      <div class='piechart-element'>
        <div class='piechart-label'>
          <div class='label-heading'>Revenue Targets</div>
          <p class='small'>hought leader Steve Jobs physical computing experiential hacker <span class='main-color'>24% increase</span>. Minimum viable product hacker paradigm. </p>
        </div>
        <div class='piechart-percent main-color'>68%</div>
        <div class='piechart-container1'>
  
          <canvas id="piechart"></canvas>
        </div>
      </div>
      <div class='piechart-element'>
  
        <div class='piechart-label'>
          <div class='label-heading'>Return Handling</div>
          <p class='small'>User centered design viral hacker personas co-working food-truck co-working <span class='main-color'> 360 campaign</span> agile.</p>
        </div>
        <div class='piechart-percent main-color'>39%</div>
        <div class='piechart-container1'>
          <canvas id="piechart2"></canvas>
        </div>
  
      </div>
      <div class='piechart-element'>
        <div class='piechart-label'>
          <div class='label-heading'>Storage Capacity</div>
          <p class='small'>Disrupt long shadow quantitative vs. qualitative bootstrapping iterate. Grok experiential is so
            <span class='main-color'>2000 and late ship</span> it venture capital fund .</p>
        </div>
        <div class='piechart-percent main-color'>34%</div>
        <div class='piechart-container1'>
          <canvas id="piechart3"></canvas>
        </div>
  
      </div>
    </div>
    <div class='row'>
  
      <div class='stats-element'>
        <div class='element-header'>Regional Performance Metrics</div>
        <div class='stats-container1' id='stats-element'>
          <div class='map-container1'>
            <div class='position-marker'></div>
            <div class='position-marker no2'></div>
            <div class='position-marker no3'></div>
            <div class='position-marker no4'></div>
            <div class='position-marker no5'></div>
            <div class='position-marker no6'></div>
          </div>
          <div class='stats-table'>
            <table class='performance-table'>
              <tbody>
                <tr>
                  <td></td>
                  <td>Orders</td>
                  <td>Returns</td>
                  <td>Basket Value</td>
                  <td>Marketing Cost</td>
                  <td>Operational Cost</td>
                  <td>Revenue</td>
                </tr>
                <tr>
                  <td class='table-desc'>Today</td>
                  <td>8</td>
                  <td>0</td>
                  <td>210$</td>
                  <td>10%</td>
                  <td>13%</td>
                  <td>1680$</td>
                </tr>
                <tr>
                  <td class='table-desc'>Week to Date</td>
                  <td>21</td>
                  <td>0</td>
                  <td>287$</td>
                  <td>18%</td>
                  <td>12%</td>
                  <td>6027$</td>
                </tr>
                <tr>
                  <td class='table-desc'>Month to Date</td>
                  <td>47</td>
                  <td>2</td>
                  <td>277$</td>
                  <td>17%</td>
                  <td>20%</td>
                  <td>13019$</td>
                </tr>
                <tr>
                  <td class='table-desc'>Year to Date</td>
                  <td>259</td>
                  <td>11</td>
                  <td>312$</td>
                  <td>15%</td>
                  <td>16%</td>
                  <td>80808$</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class='order-element' id="monitoring">
        <div class='element-header'></div>
        <div class='order-scroll up' id='order-scrollup'><i class="fa fa-chevron-up"></i></div>
        <div class='order-container1' id='order-container1'>
  
          <div class='order-item' id='order-item'>
            <h1>Order #413-8148622</h1>
            <p>Status: <span class='main-color'>Dispatched</span><br>Tracking Number: 9851 1199 72</p>
            <p>Order Date: 12/24/16<br> Customer Contact: test.clark@gmail.com</p>
  
          </div>
          <div class='order-item'>
            <h1>Order #313-55416218</h1>
            <p>Status: <span class='main-color'>Dispatched</span><br>Tracking Number: 1431 2349 11</p>
            <p>Order Date: 12/24/16<br> Customer Contact: random.guy@gmail.com</p>
          </div>
          <div class='order-item highlight'>
            <h1>Order #535-71122781</h1>
            <p>Status: <span class='highlight'>Awaiting Shipment</span><br>Tracking Number: -</p>
            <p>Order Date: 12/24/16<br> Customer Contact: aname.store@aol.com</p>
          </div>
          <div class='order-item highlight'>
            <h1>Order #455-51133742</h1>
            <p>Status: <span class='highlight'>Awaiting Shipment</span><br>Tracking Number: -</p>
            <p>Order Date: 12/24/16<br> Customer Contact: special.order@yahoo.com</p>
          </div>
          <div class='order-item hold'>
            <h1>Order #734-45422551</h1>
            <p>Status: <span class='inactive'>On Hold</span><br>Tracking Number: -</p>
            <p>Order Date: 12/20/16<br> Customer Contact: nobody123@gmail.com</p>
          </div>
          <div class='order-item hold'>
            <h1>Order #532-13422331</h1>
            <p>Status: <span class='inactive'>On Hold</span><br>Tracking Number: -</p>
            <p>Order Date: 12/19/16<br> Customer Contact: random333.star@gmail.com</p>
          </div>
          <div class='order-item hold'>
            <h1>Order #922-25491351</h1>
            <p>Status: <span class='inactive'>On Hold</span><br>Tracking Number: -</p>
            <p>Order Date: 12/19/16<br> Customer Contact: santa@gmail.com</p>
          </div>
        </div>
        <div class='order-scroll' id='order-scrolldown'><i class="fa fa-chevron-down"></i></div>
      </div>
    </div>
    <div class='element-header social' id="Workflow">Workflow</div>
  
    <div class='row todo'>
      <div class='social-element'>
        <div class='chatbox-container1'>
          <div class='anna-image'></div>
          <div class='chatbox-left'><span class='username'>Ana Maria:</span>Hi <span class='highlight'>@Carlos</span>, please make sure to have a look at <a href='#' class='main-color'>#413-8148622</a>, needs dispatch ASAP.</div>
        </div>
        <div class='chatbox-container1'>
          <div class='anna-image'></div>
          <div class='chatbox-left'><span class='username'>Ana Maria:</span>Aw sorry, forgot to attach the updated invoice.</div>
        </div>
        <div class='chatbox-container1'>
          <div class='jimmy-image'></div>
          <div class='chatbox-left'><span class='username'>Carlos:</span>Hey <span class='highlight'>@AnaMaria</span>, don't you worry - I'm here to save the day. Order is already dispached!</div>
        </div>
        <p class='spacing-adjuster'></p>
        <div class='chat-input'>
          <textarea rows='1' placeholder='Add a comment to this workflow...'></textarea>
          <div class='submit-icon'><i class="fa fa-paper-plane-o"></i></div>
        </div>
      </div>
      <div class='todo-element'>
        <div class='table-header todo'>
          <div class='country-select'>Files</div>
          <div class='country-select'>Todos</div>
        </div>
        <div class='file-container1 small'>
  
          <ul>
            <li><span><i class="fa fa-file-pdf-o"></i> invoice#413-814updated.pdf</span></li>
            <li><i class="fa fa-file-excel-o"></i> revenue-summary.xls</li>
            <li><i class="fa fa-file-pdf-o"></i> region30_map.pdf</li>
          </ul>
  
  
          <div class='draghere'><i class="fa fa-lg fa-cloud-upload"></i>Drag new files here</div>
  
        </div>
      </div>
    </div>
  </div>
    </div>
</x-app-layout>
