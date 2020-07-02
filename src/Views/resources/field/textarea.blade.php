<v-input-textarea class='mb-3'  
    :disabled='{{$disabled}}'                                                                  
    label='{{$label}}'                                                                     
    type='{{$type}}'           
    :rows='{{$rows}}'                                                          
    v-model='{{"form.$field"}}'                                                            
    placeholder='{{$placeholder}}'                                                       
    :errors='{{"errors.$field ? errors.$field : false"}}'                                              
/>